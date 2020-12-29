<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216144339 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, recettes_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_E01FBE6A3E2ED6D6 (recettes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recettes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, note DOUBLE PRECISION NOT NULL, ingrédients LONGTEXT NOT NULL, préparation LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A3E2ED6D6 FOREIGN KEY (recettes_id) REFERENCES recettes (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A3E2ED6D6');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE recettes');
    }
}
