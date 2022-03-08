<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Entity\Users;
use App\Form\EditUserType;
use App\Form\UsersType;
use App\Repository\ActiviteRepository;
use App\Repository\UsersRepository;
use ContainerI3qGHVP\PaginatorInterface_82dac15;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Symfony\Component\HttpFoundation\File\Exception\FileException;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use function PHPUnit\Framework\stringContains;


/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {

        return $this->render('admin/users.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }


    /**
     * @route("/utilisateurs", name="utilisateurs")
     */
    public function usersListe(Request $request,UsersRepository $users, FlashyNotifier $flashy,PaginatorInterface $paginator)
    {
        $flashy->primaryDark('Liste des users');



        $donnees = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findBy([],['id' => 'desc']);

        $users = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1),2 // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
             // Nombre de résultats par page
        );



        return $this->render("admin/users.html.twig",[
            'users' => $users ]);

    }


    /**
     * @route("/utilisateur/modifier/{id}", name="modifier_utilisateur")
     */
    public function editUser(Users $user, Request $request)
    {

        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();



            $this->addFlash('message', 'utilisateur modifie avec succes');
            return $this->redirectToRoute('admin_utilisateurs');
        }


        return $this->render('admin/edituser.html.twig', [
            'userForm' => $form->createView()
        ]);

    }






    /**
     * @Route("/utilisateur/pdf", name="pdf",methods={"GET"} )
     */
    public function pdf(Request $request){

// Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

// Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $repository=$this->getdoctrine()->getrepository(Users::class);
        $allCoch=$repository->findAll();

// Retrieve the HTML generated in our twig file
        $html = $this->renderView('admin/pdf.html.twig', [
            'title' => "Welcome to our PDF Test", 'Users'=>$allCoch,
        ]);

// Load HTML to Dompdf
        $dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A1', 'portrait');

// Render the HTML as PDF
        $dompdf->render();

// Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }




    /**
     * @Route("/r/search_user", name="search_user", methods={"GET"})
     */
    public function search_usere(Request $request,NormalizerInterface $Normalizer,UsersRepository $UserRepo ): Response
    {

        $requestString=$request->get('searchValue');
        $requestString3=$request->get('orderid');
        //dump($requestString);
        // dump($requestString2);
        $user = $UserRepo->findUser($requestString,$requestString3);
        //dump($Hotel);
        $jsoncontentc =$Normalizer->normalize($user,'json',['groups'=>'posts:read']);
        //  dump($jsoncontentc);
        $jsonc=json_encode($jsoncontentc);
        //   dump($jsonc);
        if(  $jsonc == "[]" ) { return new Response(null); }
        else{ return new Response($jsonc); }

    }









    public function getData() :array
    {
        /**
         * @var $Users Resta[]
         */
        $list = [];

        $Use = $this->getDoctrine()->getRepository(Users::class)->findAll();

        foreach ($Use as $Resta) {
            $list[] = [
                $Resta->getId(),
                $Resta->getEmail(),
                //$Resta->getRoles(),
                $Resta->getPassword(),
            ];
        }
        return $list;
    }



    /**
     * @Route("/excel/export",  name="export")
     */
    public function export()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Restaurant List');
        $sheet->getCell('A1')->setValue('id');
        $sheet->getCell('B1')->setValue('email');
        $sheet->getCell('C1')->setValue('roles');
        $sheet->getCell('D1')->setValue('password');

        // Increase row cursor after header write
        $sheet->fromArray($this->getData(),null, 'A2', true);
        $writer = new Xlsx($spreadsheet);
        // $writer->save('ss.xlsx');
        $writer->save('Users'.date('m-d-Y_his').'.xlsx');
        return $this->redirectToRoute('admin_utilisateurs');

    }





    /**
     * @Route("/e/statlina", name="statlina", methods={"GET"})
     */
    public function reclamation_stat(UsersRepository $usersRepository): Response
    {
        $nbrs[]=Array();

        $e1=$usersRepository->find_Nb_Rec_Par_Status("Homme");
        dump($e1);
        $nbrs[]=$e1[0][1];


        $e2=$usersRepository->find_Nb_Rec_Par_Status("Femme");
        dump($e2);
        $nbrs[]=$e2[0][1];

        /*
                $e3=$activiteRepository->find_Nb_Rec_Par_Status("Diffence");
                dump($e3);
                $nbrs[]=$e3[0][1];
        */

        dump($nbrs);
        reset($nbrs);
        dump(reset($nbrs));
        $key = key($nbrs);
        dump($key);
        dump($nbrs[$key]);

        unset($nbrs[$key]);

        $nbrss=array_values($nbrs);
        dump(json_encode($nbrss));

        return $this->render('admin/stat.html.twig', [
            'nbr' => json_encode($nbrss),
        ]);
    }













}
