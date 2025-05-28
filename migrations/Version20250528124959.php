<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250528124959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // Disable foreign key checks to allow dropping tables regardless of constraints
        $this->addSql(<<<'SQL'
            SET FOREIGN_KEY_CHECKS=0
        SQL);
        
        // Safely drop tables using IF EXISTS
        $this->addSql(<<<'SQL'
            DROP TABLE IF EXISTS coupon_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE IF EXISTS coupon
        SQL);
        
        // Re-enable foreign key checks
        $this->addSql(<<<'SQL'
            SET FOREIGN_KEY_CHECKS=1
        SQL);
        // Only modify the image column to LONGBLOB
        $this->addSql(<<<'SQL'
            ALTER TABLE product CHANGE image image LONGBLOB DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE coupon (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, value NUMERIC(10, 3) NOT NULL, minimum_purchase NUMERIC(10, 3) DEFAULT NULL, valid_from DATETIME DEFAULT NULL, valid_to DATETIME DEFAULT NULL, is_active TINYINT(1) DEFAULT 1 NOT NULL, usage_limit INT DEFAULT NULL, usage_count INT DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX code (code), INDEX idx_coupon_code (code), INDEX idx_coupon_is_active (is_active), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE coupon_category (coupon_id INT NOT NULL, category_id INT NOT NULL, INDEX fk_coupon_category_category (category_id), INDEX IDX_1FCF47F366C5951B (coupon_id), PRIMARY KEY(coupon_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE coupon_category ADD CONSTRAINT fk_coupon_category_category FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE coupon_category ADD CONSTRAINT fk_coupon_category_coupon FOREIGN KEY (coupon_id) REFERENCES coupon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_8D93D649E7927C74 ON user
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE product DROP image_mime_type, CHANGE price price DOUBLE PRECISION NOT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL
        SQL);
    }
}
