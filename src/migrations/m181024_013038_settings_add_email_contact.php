<?php

use yii\db\Migration;

/**
 * Class m181024_013038_settings_add_email_contact
 */
class m181024_013038_settings_add_email_contact extends Migration
{
    public function safeUp()
    {
        $this->insert('setting', [
            'key' => 'contact_form_to_emai',
            'title' => 'Электронная почта для обратной связи',
            'value' => 'support@gmail.com',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function safeDown()
    {
        return true;
    }
}
