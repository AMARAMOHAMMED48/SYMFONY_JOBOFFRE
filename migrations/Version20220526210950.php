<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220526210950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offre_emploi (id INT AUTO_INCREMENT NOT NULL, titre_offre VARCHAR(255) NOT NULL, domaine_offre VARCHAR(255) NOT NULL, region_offre VARCHAR(255) NOT NULL, designation_offre VARCHAR(255) NOT NULL, condition_offre VARCHAR(255) NOT NULL, date_offre DATE NOT NULL, date_finoffre DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE postulant (id INT AUTO_INCREMENT NOT NULL, pays_postulant VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, fonction_postulant VARCHAR(255) NOT NULL, tel_postulant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recruteur (id INT AUTO_INCREMENT NOT NULL, address_recruteur VARCHAR(255) NOT NULL, region_recruteur VARCHAR(255) NOT NULL, ville_recruteur VARCHAR(255) NOT NULL, secteur_activite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE offre_emploi');
        $this->addSql('DROP TABLE postulant');
        $this->addSql('DROP TABLE recruteur');
    }
}
