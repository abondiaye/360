<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241027215252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE automated_diagnostic (id INT AUTO_INCREMENT NOT NULL, support_call_id INT DEFAULT NULL, diagnostic_result LONGTEXT NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_8660C163ED9D93D0 (support_call_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_call (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, technician_id INT DEFAULT NULL, problem_description LONGTEXT NOT NULL, call_start_time DATETIME DEFAULT NULL, call_end_time DATETIME DEFAULT NULL, status VARCHAR(20) NOT NULL, INDEX IDX_1498B96D19EB6921 (client_id), INDEX IDX_1498B96DE6C5D496 (technician_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE automated_diagnostic ADD CONSTRAINT FK_8660C163ED9D93D0 FOREIGN KEY (support_call_id) REFERENCES support_call (id)');
        $this->addSql('ALTER TABLE support_call ADD CONSTRAINT FK_1498B96D19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE support_call ADD CONSTRAINT FK_1498B96DE6C5D496 FOREIGN KEY (technician_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE automated_diagnostic DROP FOREIGN KEY FK_8660C163ED9D93D0');
        $this->addSql('ALTER TABLE support_call DROP FOREIGN KEY FK_1498B96D19EB6921');
        $this->addSql('ALTER TABLE support_call DROP FOREIGN KEY FK_1498B96DE6C5D496');
        $this->addSql('DROP TABLE automated_diagnostic');
        $this->addSql('DROP TABLE support_call');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
