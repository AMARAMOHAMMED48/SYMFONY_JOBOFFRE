<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220523011242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resume ADD user_id_id INT DEFAULT NULL, DROP info_postulant, DROP user_id');
        $this->addSql('ALTER TABLE resume ADD CONSTRAINT FK_60C1D0A09D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_60C1D0A09D86650F ON resume (user_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resume DROP FOREIGN KEY FK_60C1D0A09D86650F');
        $this->addSql('DROP INDEX IDX_60C1D0A09D86650F ON resume');
        $this->addSql('ALTER TABLE resume ADD info_postulant INT NOT NULL, ADD user_id INT NOT NULL, DROP user_id_id');
    }
}
