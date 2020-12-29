<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201219103416 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recettes DROP FOREIGN KEY FK_EB48E72C12469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP INDEX IDX_EB48E72C12469DE2 ON recettes');
        $this->addSql('ALTER TABLE recettes ADD category LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', DROP category_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, entrée TINYINT(1) NOT NULL, plat TINYINT(1) NOT NULL, dessert TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE recettes ADD category_id INT NOT NULL, DROP category');
        $this->addSql('ALTER TABLE recettes ADD CONSTRAINT FK_EB48E72C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_EB48E72C12469DE2 ON recettes (category_id)');
    }
}
