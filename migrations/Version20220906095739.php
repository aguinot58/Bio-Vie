<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220906095739 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites (id INT AUTO_INCREMENT NOT NULL, nom_activite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activites_operateurs (activites_id INT NOT NULL, operateurs_id INT NOT NULL, INDEX IDX_CB4784275B8C31B7 (activites_id), INDEX IDX_CB4784275379F280 (operateurs_id), PRIMARY KEY(activites_id, operateurs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories_operateurs (categories_id INT NOT NULL, operateurs_id INT NOT NULL, INDEX IDX_348AD703A21214B7 (categories_id), INDEX IDX_348AD7035379F280 (operateurs_id), PRIMARY KEY(categories_id, operateurs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE operateurs (id INT AUTO_INCREMENT NOT NULL, numero_bio VARCHAR(255) DEFAULT NULL, siret VARCHAR(255) DEFAULT NULL, code_naf VARCHAR(255) DEFAULT NULL, gerant VARCHAR(255) DEFAULT NULL, raison_sociale VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, telephone VARCHAR(10) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, date_maj DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activites_operateurs ADD CONSTRAINT FK_CB4784275B8C31B7 FOREIGN KEY (activites_id) REFERENCES activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activites_operateurs ADD CONSTRAINT FK_CB4784275379F280 FOREIGN KEY (operateurs_id) REFERENCES operateurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories_operateurs ADD CONSTRAINT FK_348AD703A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories_operateurs ADD CONSTRAINT FK_348AD7035379F280 FOREIGN KEY (operateurs_id) REFERENCES operateurs (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activites_operateurs DROP FOREIGN KEY FK_CB4784275B8C31B7');
        $this->addSql('ALTER TABLE activites_operateurs DROP FOREIGN KEY FK_CB4784275379F280');
        $this->addSql('ALTER TABLE categories_operateurs DROP FOREIGN KEY FK_348AD703A21214B7');
        $this->addSql('ALTER TABLE categories_operateurs DROP FOREIGN KEY FK_348AD7035379F280');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE activites_operateurs');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE categories_operateurs');
        $this->addSql('DROP TABLE operateurs');
    }
}
