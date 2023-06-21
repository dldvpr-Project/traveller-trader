<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230525135138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE district (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_district (product_id INT NOT NULL, district_id INT NOT NULL, INDEX IDX_FA713E104584665A (product_id), INDEX IDX_FA713E10B08FA272 (district_id), PRIMARY KEY(product_id, district_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product_district ADD CONSTRAINT FK_FA713E104584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_district ADD CONSTRAINT FK_FA713E10B08FA272 FOREIGN KEY (district_id) REFERENCES district (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_district DROP FOREIGN KEY FK_FA713E104584665A');
        $this->addSql('ALTER TABLE product_district DROP FOREIGN KEY FK_FA713E10B08FA272');
        $this->addSql('DROP TABLE district');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_district');
    }
}
