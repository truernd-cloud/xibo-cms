<?php
/**
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

use Phinx\Migration\AbstractMigration;

class DisableDashboardLatestNewsMigration extends AbstractMigration
{
    /** @inheritDoc */
    public function change()
    {
        $this->execute('UPDATE `setting` SET `value` = 0 WHERE setting = \'DASHBOARD_LATEST_NEWS_ENABLED\'');
    }
}
