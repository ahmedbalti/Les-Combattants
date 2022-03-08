<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308155951 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, date DATE NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, room INT DEFAULT NULL, title VARCHAR(100) NOT NULL, number INT NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, name LONGTEXT NOT NULL, all_day TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, INDEX IDX_6EA9A146729F519B (room), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club (id INT AUTO_INCREMENT NOT NULL, cover_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, INDEX IDX_B8EE3872922726E9 (cover_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, date DATE NOT NULL, type VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, lieuid INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hebergement (id INT AUTO_INCREMENT NOT NULL, cover_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, nb_stars INT NOT NULL, nb_rooms INT NOT NULL, address VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, INDEX IDX_4852DD9C922726E9 (cover_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, file VARCHAR(255) NOT NULL, alt VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, capacite INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(10) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, score_min INT NOT NULL, title VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion_affecte (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_promo_id INT NOT NULL, delai DATE NOT NULL, INDEX IDX_10ED5BD279F37AE5 (id_user_id), INDEX IDX_10ED5BD2801B966A (id_promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, club INT DEFAULT NULL, utilisateur INT DEFAULT NULL, nbr_etoiles INT NOT NULL, INDEX IDX_D8892622B8EE3872 (club), INDEX IDX_D88926221D1C63B3 (utilisateur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, tabl INT DEFAULT NULL, date DATE NOT NULL, heure TIME NOT NULL, nbr_personnes DOUBLE PRECISION NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_42C849559FC36D96 (tabl), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `room` (id INT AUTO_INCREMENT NOT NULL, cover_id INT DEFAULT NULL, hebergement INT DEFAULT NULL, number INT NOT NULL, etage INT NOT NULL, nb_lit INT NOT NULL, price VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, emplacement VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_729F519B922726E9 (cover_id), INDEX IDX_729F519B4852DD9C (hebergement), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `tabl` (id INT AUTO_INCREMENT NOT NULL, cover_id INT DEFAULT NULL, club INT DEFAULT NULL, numero SMALLINT NOT NULL, position VARCHAR(255) NOT NULL, forme VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, INDEX IDX_9FC36D96922726E9 (cover_id), INDEX IDX_9FC36D96B8EE3872 (club), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, activation_token VARCHAR(50) DEFAULT NULL, reset_token VARCHAR(50) DEFAULT NULL, genre VARCHAR(50) NOT NULL, nom VARCHAR(180) NOT NULL, prenom VARCHAR(180) NOT NULL, image VARCHAR(180) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, num_tel INT DEFAULT NULL, score INT NOT NULL, type VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A146729F519B FOREIGN KEY (room) REFERENCES `room` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE club ADD CONSTRAINT FK_B8EE3872922726E9 FOREIGN KEY (cover_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT FK_4852DD9C922726E9 FOREIGN KEY (cover_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE promotion_affecte ADD CONSTRAINT FK_10ED5BD279F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE promotion_affecte ADD CONSTRAINT FK_10ED5BD2801B966A FOREIGN KEY (id_promo_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622B8EE3872 FOREIGN KEY (club) REFERENCES club (id)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926221D1C63B3 FOREIGN KEY (utilisateur) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559FC36D96 FOREIGN KEY (tabl) REFERENCES `tabl` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `room` ADD CONSTRAINT FK_729F519B922726E9 FOREIGN KEY (cover_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE `room` ADD CONSTRAINT FK_729F519B4852DD9C FOREIGN KEY (hebergement) REFERENCES hebergement (id)');
        $this->addSql('ALTER TABLE `tabl` ADD CONSTRAINT FK_9FC36D96922726E9 FOREIGN KEY (cover_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE `tabl` ADD CONSTRAINT FK_9FC36D96B8EE3872 FOREIGN KEY (club) REFERENCES club (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622B8EE3872');
        $this->addSql('ALTER TABLE `tabl` DROP FOREIGN KEY FK_9FC36D96B8EE3872');
        $this->addSql('ALTER TABLE `room` DROP FOREIGN KEY FK_729F519B4852DD9C');
        $this->addSql('ALTER TABLE club DROP FOREIGN KEY FK_B8EE3872922726E9');
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY FK_4852DD9C922726E9');
        $this->addSql('ALTER TABLE `room` DROP FOREIGN KEY FK_729F519B922726E9');
        $this->addSql('ALTER TABLE `tabl` DROP FOREIGN KEY FK_9FC36D96922726E9');
        $this->addSql('ALTER TABLE promotion_affecte DROP FOREIGN KEY FK_10ED5BD2801B966A');
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A146729F519B');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559FC36D96');
        $this->addSql('ALTER TABLE promotion_affecte DROP FOREIGN KEY FK_10ED5BD279F37AE5');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926221D1C63B3');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE calendar');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE hebergement');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE promotion_affecte');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE `room`');
        $this->addSql('DROP TABLE `tabl`');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE utilisateur');
    }
}
