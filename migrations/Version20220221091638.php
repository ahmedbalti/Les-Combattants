<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221091638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, file VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(10) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, score_min INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion_affecte (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_promo_id INT NOT NULL, delai DATE NOT NULL, INDEX IDX_10ED5BD279F37AE5 (id_user_id), INDEX IDX_10ED5BD2801B966A (id_promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, addresse VARCHAR(100) DEFAULT NULL, num_tel INT DEFAULT NULL, score INT NOT NULL, type VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE promotion_affecte ADD CONSTRAINT FK_10ED5BD279F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE promotion_affecte ADD CONSTRAINT FK_10ED5BD2801B966A FOREIGN KEY (id_promo_id) REFERENCES promotion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion_affecte DROP FOREIGN KEY FK_10ED5BD2801B966A');
        $this->addSql('ALTER TABLE promotion_affecte DROP FOREIGN KEY FK_10ED5BD279F37AE5');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE promotion_affecte');
        $this->addSql('DROP TABLE utilisateur');
    }
}
