<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250425230821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE account_bank_accounts (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, iban VARCHAR(40) NOT NULL, bank_name VARCHAR(80) NOT NULL, bank_shortcut VARCHAR(10) NOT NULL, logo_name VARCHAR(100) DEFAULT NULL, balance NUMERIC(12, 2) DEFAULT NULL, balance_date DATETIME DEFAULT NULL, INDEX IDX_64AEB898637A8045 (ref_user_id), UNIQUE INDEX uidx_accbankaccs1 (ref_user_id, iban), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE account_categories (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, name VARCHAR(100) NOT NULL, is_fixed TINYINT(1) NOT NULL, is_active TINYINT(1) NOT NULL, INDEX IDX_C668B4CC637A8045 (ref_user_id), UNIQUE INDEX uidx_acccatname (ref_user_id, Name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE account_data (id INT AUTO_INCREMENT NOT NULL, ref_category_id INT DEFAULT NULL, ref_user_id INT NOT NULL, booking_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT NOT NULL, amount NUMERIC(12, 2) NOT NULL, accounting_number VARCHAR(34) NOT NULL, currency VARCHAR(10) NOT NULL, bank_id INT NOT NULL, is_income TINYINT(1) NOT NULL, recipient_account VARCHAR(60) DEFAULT NULL, INDEX IDX_216074C9E84F656E (ref_category_id), INDEX IDX_216074C9637A8045 (ref_user_id), UNIQUE INDEX uidx_accdata1 (booking_date, description, amount, ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE account_import_filter (id INT AUTO_INCREMENT NOT NULL, ref_category_id INT NOT NULL, ref_user_id INT NOT NULL, name VARCHAR(100) NOT NULL, definition VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_9CD3D9B6E84F656E (ref_category_id), INDEX IDX_9CD3D9B6637A8045 (ref_user_id), UNIQUE INDEX uidx_accimpfilter1 (name, ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE app_config (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT DEFAULT NULL, key_name VARCHAR(100) NOT NULL, value VARCHAR(255) DEFAULT NULL, INDEX IDX_318942FC637A8045 (ref_user_id), UNIQUE INDEX appcfg_uidx_1 (key_name, ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_configuration (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, company_name VARCHAR(255) NOT NULL, company_owner VARCHAR(255) NOT NULL, company_street VARCHAR(255) DEFAULT NULL, company_city VARCHAR(255) DEFAULT NULL, company_postal VARCHAR(20) DEFAULT NULL, company_country VARCHAR(255) DEFAULT NULL, company_tax_number VARCHAR(30) NOT NULL, company_email VARCHAR(255) DEFAULT NULL, company_phone VARCHAR(40) DEFAULT NULL, company_fax VARCHAR(40) DEFAULT NULL, company_logo LONGBLOB DEFAULT NULL, bank_name VARCHAR(255) DEFAULT NULL, bank_account VARCHAR(100) DEFAULT NULL, bank_iban VARCHAR(40) DEFAULT NULL, bank_bic VARCHAR(12) DEFAULT NULL, company_logo_name VARCHAR(255) DEFAULT NULL, company_logo_size INT DEFAULT NULL, company_logo_mime_type VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_5AA9DF0F637A8045 (ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_customer (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, customer_number VARCHAR(38) NOT NULL, name VARCHAR(200) NOT NULL, contact_email VARCHAR(200) NOT NULL, contact_name VARCHAR(200) DEFAULT NULL, contact_position VARCHAR(100) DEFAULT NULL, active TINYINT(1) NOT NULL, street VARCHAR(200) DEFAULT NULL, city VARCHAR(100) DEFAULT NULL, postal_code VARCHAR(20) DEFAULT NULL, country VARCHAR(200) DEFAULT NULL, phone_business VARCHAR(30) DEFAULT NULL, phone_private VARCHAR(30) DEFAULT NULL, phone_mobile VARCHAR(30) DEFAULT NULL, phone_fax VARCHAR(30) DEFAULT NULL, customer_url VARCHAR(255) DEFAULT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_modified_on DATETIME DEFAULT NULL, INDEX IDX_51CDD6AE637A8045 (ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_invoices (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, ref_customer_id INT NOT NULL, invoice_type INT NOT NULL, is_paid TINYINT(1) NOT NULL, invoice_date DATE NOT NULL, invoice_number VARCHAR(30) NOT NULL, sum_netto NUMERIC(10, 2) DEFAULT NULL, sum_brutto NUMERIC(10, 2) DEFAULT NULL, tax_pct NUMERIC(5, 2) DEFAULT NULL, no_tax TINYINT(1) NOT NULL, comment LONGTEXT DEFAULT NULL, pdf_filename VARCHAR(255) DEFAULT NULL, pdf_filesize INT DEFAULT NULL, pdf_mime_type VARCHAR(100) DEFAULT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_modified_on DATETIME DEFAULT NULL, pdf_data LONGBLOB DEFAULT NULL, INDEX IDX_BADB7732637A8045 (ref_user_id), INDEX IDX_BADB7732699C3B7F (ref_customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_project_entries (id INT AUTO_INCREMENT NOT NULL, ref_project_id INT NOT NULL, ref_user_id INT NOT NULL, entry_date DATETIME NOT NULL, work_time_in_secs INT DEFAULT NULL, status INT NOT NULL, work_description LONGTEXT DEFAULT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_modified_on DATETIME DEFAULT NULL, record_type SMALLINT DEFAULT 0, costs NUMERIC(10, 2) DEFAULT NULL, INDEX IDX_42D797DE10A8F082 (ref_project_id), INDEX IDX_42D797DE637A8045 (ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_projects (id INT AUTO_INCREMENT NOT NULL, ref_customer_id INT NOT NULL, ref_user_id INT NOT NULL, project_name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, status SMALLINT NOT NULL, work_unit INT NOT NULL, pay_per_work_unit INT NOT NULL, currency VARCHAR(10) NOT NULL, time_budget INT NOT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_modified_on DATETIME DEFAULT NULL, no_reporting TINYINT(1) DEFAULT NULL, INDEX IDX_8C67EB03699C3B7F (ref_customer_id), INDEX IDX_8C67EB03637A8045 (ref_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_service_contract_entries (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, ref_contract_id INT NOT NULL, billing_date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', billing_fee NUMERIC(12, 2) NOT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_AC976E8F637A8045 (ref_user_id), INDEX IDX_AC976E8FDF7F1871 (ref_contract_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fl_service_contracts (id INT AUTO_INCREMENT NOT NULL, ref_user_id INT NOT NULL, ref_customer_id INT NOT NULL, contract_name VARCHAR(200) NOT NULL, contract_start_date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', contract_end_date DATE DEFAULT NULL, contract_fee NUMERIC(12, 2) NOT NULL, contract_description LONGTEXT DEFAULT NULL, contract_filename VARCHAR(255) DEFAULT NULL, contract_filesize INT DEFAULT NULL, contract_filetype VARCHAR(100) DEFAULT NULL, contract_data LONGBLOB DEFAULT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_modified_on DATETIME DEFAULT NULL, INDEX IDX_D5C8968A637A8045 (ref_user_id), INDEX IDX_D5C8968A699C3B7F (ref_customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, created_on DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE account_bank_accounts ADD CONSTRAINT FK_64AEB898637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE account_categories ADD CONSTRAINT FK_C668B4CC637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE account_data ADD CONSTRAINT FK_216074C9E84F656E FOREIGN KEY (ref_category_id) REFERENCES account_categories (id)');
        $this->addSql('ALTER TABLE account_data ADD CONSTRAINT FK_216074C9637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE account_import_filter ADD CONSTRAINT FK_9CD3D9B6E84F656E FOREIGN KEY (ref_category_id) REFERENCES account_categories (id)');
        $this->addSql('ALTER TABLE account_import_filter ADD CONSTRAINT FK_9CD3D9B6637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE app_config ADD CONSTRAINT FK_318942FC637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE fl_configuration ADD CONSTRAINT FK_5AA9DF0F637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_customer ADD CONSTRAINT FK_51CDD6AE637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_invoices ADD CONSTRAINT FK_BADB7732637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_invoices ADD CONSTRAINT FK_BADB7732699C3B7F FOREIGN KEY (ref_customer_id) REFERENCES fl_customer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_project_entries ADD CONSTRAINT FK_42D797DE10A8F082 FOREIGN KEY (ref_project_id) REFERENCES fl_projects (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_project_entries ADD CONSTRAINT FK_42D797DE637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE fl_projects ADD CONSTRAINT FK_8C67EB03699C3B7F FOREIGN KEY (ref_customer_id) REFERENCES fl_customer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_projects ADD CONSTRAINT FK_8C67EB03637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_service_contract_entries ADD CONSTRAINT FK_AC976E8F637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_service_contract_entries ADD CONSTRAINT FK_AC976E8FDF7F1871 FOREIGN KEY (ref_contract_id) REFERENCES fl_service_contracts (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_service_contracts ADD CONSTRAINT FK_D5C8968A637A8045 FOREIGN KEY (ref_user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fl_service_contracts ADD CONSTRAINT FK_D5C8968A699C3B7F FOREIGN KEY (ref_customer_id) REFERENCES fl_customer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account_bank_accounts DROP FOREIGN KEY FK_64AEB898637A8045');
        $this->addSql('ALTER TABLE account_categories DROP FOREIGN KEY FK_C668B4CC637A8045');
        $this->addSql('ALTER TABLE account_data DROP FOREIGN KEY FK_216074C9E84F656E');
        $this->addSql('ALTER TABLE account_data DROP FOREIGN KEY FK_216074C9637A8045');
        $this->addSql('ALTER TABLE account_import_filter DROP FOREIGN KEY FK_9CD3D9B6E84F656E');
        $this->addSql('ALTER TABLE account_import_filter DROP FOREIGN KEY FK_9CD3D9B6637A8045');
        $this->addSql('ALTER TABLE app_config DROP FOREIGN KEY FK_318942FC637A8045');
        $this->addSql('ALTER TABLE fl_configuration DROP FOREIGN KEY FK_5AA9DF0F637A8045');
        $this->addSql('ALTER TABLE fl_customer DROP FOREIGN KEY FK_51CDD6AE637A8045');
        $this->addSql('ALTER TABLE fl_invoices DROP FOREIGN KEY FK_BADB7732637A8045');
        $this->addSql('ALTER TABLE fl_invoices DROP FOREIGN KEY FK_BADB7732699C3B7F');
        $this->addSql('ALTER TABLE fl_project_entries DROP FOREIGN KEY FK_42D797DE10A8F082');
        $this->addSql('ALTER TABLE fl_project_entries DROP FOREIGN KEY FK_42D797DE637A8045');
        $this->addSql('ALTER TABLE fl_projects DROP FOREIGN KEY FK_8C67EB03699C3B7F');
        $this->addSql('ALTER TABLE fl_projects DROP FOREIGN KEY FK_8C67EB03637A8045');
        $this->addSql('ALTER TABLE fl_service_contract_entries DROP FOREIGN KEY FK_AC976E8F637A8045');
        $this->addSql('ALTER TABLE fl_service_contract_entries DROP FOREIGN KEY FK_AC976E8FDF7F1871');
        $this->addSql('ALTER TABLE fl_service_contracts DROP FOREIGN KEY FK_D5C8968A637A8045');
        $this->addSql('ALTER TABLE fl_service_contracts DROP FOREIGN KEY FK_D5C8968A699C3B7F');
        $this->addSql('DROP TABLE account_bank_accounts');
        $this->addSql('DROP TABLE account_categories');
        $this->addSql('DROP TABLE account_data');
        $this->addSql('DROP TABLE account_import_filter');
        $this->addSql('DROP TABLE app_config');
        $this->addSql('DROP TABLE fl_configuration');
        $this->addSql('DROP TABLE fl_customer');
        $this->addSql('DROP TABLE fl_invoices');
        $this->addSql('DROP TABLE fl_project_entries');
        $this->addSql('DROP TABLE fl_projects');
        $this->addSql('DROP TABLE fl_service_contract_entries');
        $this->addSql('DROP TABLE fl_service_contracts');
        $this->addSql('DROP TABLE `user`');
    }
}
