<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230228172247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menus_categories (menus_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_2C7F3E2514041B84 (menus_id), INDEX IDX_2C7F3E25A21214B7 (categories_id), PRIMARY KEY(menus_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE menus_categories ADD CONSTRAINT FK_2C7F3E2514041B84 FOREIGN KEY (menus_id) REFERENCES menus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menus_categories ADD CONSTRAINT FK_2C7F3E25A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories CHANGE label title VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dishes ADD categories_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dishes ADD CONSTRAINT FK_584DD35DA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_584DD35DA21214B7 ON dishes (categories_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE menus_categories DROP FOREIGN KEY FK_2C7F3E2514041B84');
        $this->addSql('ALTER TABLE menus_categories DROP FOREIGN KEY FK_2C7F3E25A21214B7');
        $this->addSql('DROP TABLE menus_categories');
        $this->addSql('ALTER TABLE dishes DROP FOREIGN KEY FK_584DD35DA21214B7');
        $this->addSql('DROP INDEX IDX_584DD35DA21214B7 ON dishes');
        $this->addSql('ALTER TABLE dishes DROP categories_id');
        $this->addSql('ALTER TABLE categories CHANGE title label VARCHAR(255) DEFAULT NULL');
    }
}
