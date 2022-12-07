<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Назва банку',
    'bank_balance'                => 'Баланс',
    'savings_balance'             => 'Баланс заощаджень',
    'credit_card_limit'           => 'Кредитний ліміт',
    'automatch'                   => 'Зіставляти автоматично',
    'skip'                        => 'Пропустити',
    'enabled'                     => 'Ввімкнено',
    'name'                        => 'Назва',
    'active'                      => 'Активно',
    'amount_min'                  => 'Мінімальна сума',
    'amount_max'                  => 'Максимальна сума',
    'match'                       => 'Зіставляти з',
    'strict'                      => 'Жорсткий режим',
    'repeat_freq'                 => 'Повторюється',
    'object_group'                => 'Група',
    'location'                    => 'Розташування',
    'update_channel'              => 'Канал оновлень',
    'currency_id'                 => 'Валюта',
    'transaction_currency_id'     => 'Валюта',
    'auto_budget_currency_id'     => 'Грошова одиниця',
    'external_ip'                 => 'Зовнішній IP Вашого сервера',
    'attachments'                 => 'Вкладення',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Перевіряти безпеку пароля',
    'source_account'              => 'Вихідний рахунок',
    'destination_account'         => 'Рахунок-одержувач',
    'asset_destination_account'   => 'Рахунок-одержувач',
    'include_net_worth'           => 'Включати в капітал',
    'asset_source_account'        => 'Вихідний рахунок',
    'journal_description'         => 'Опис',
    'note'                        => 'Нотатки',
    'currency'                    => 'Валюта',
    'account_id'                  => 'Рахунок активів',
    'budget_id'                   => 'Бюджет',
    'bill_id'                     => 'Bill',
    'opening_balance'             => 'Початковий баланс',
    'tagMode'                     => 'Режим міток',
    'virtual_balance'             => 'Віртуальний баланс',
    'targetamount'                => 'Сума накопичення',
    'account_role'                => 'Тип рахунку',
    'opening_balance_date'        => 'Дата початкового балансу',
    'cc_type'                     => 'План оплати банківською картою',
    'cc_monthly_payment_date'     => 'Дата оплати місячних платежів банківською карткою',
    'piggy_bank_id'               => 'Скарбничка',
    'returnHere'                  => 'Повернутися сюди',
    'returnHereExplanation'       => 'Після збереження, повернутися сюди, щоб створити ще один.',
    'returnHereUpdateExplanation' => 'Після оновлення, повернутись сюди.',
    'description'                 => 'Опис',
    'expense_account'             => 'Рахунок витрат',
    'revenue_account'             => 'Рахунки доходів',
    'decimal_places'              => 'Десяткові розряди',
    'destination_amount'          => 'Сума (призначення)',
    'new_email_address'           => 'Нова адреса електронної пошти',
    'verification'                => 'Перевірка',
    'api_key'                     => 'Ключ API',
    'remember_me'                 => 'Запам\'ятати мене',
    'liability_type_id'           => 'Тип пасиву',
    'liability_type'              => 'Liability type',
    'interest'                    => 'Відсоткова ставка',
    'interest_period'             => 'Період нарахування відсотків',
    'extension_date'              => 'Extension date',
    'type'                        => 'Тип',
    'convert_Withdrawal'          => 'Перетворити витрату',
    'convert_Deposit'             => 'Перетворити депозит',
    'convert_Transfer'            => 'Перетворити переказ',
    'amount'                      => 'Сума',
    'foreign_amount'              => 'Іноземна сума',
    'date'                        => 'Дата',
    'interest_date'               => 'Дата нарахування відсотку',
    'book_date'                   => 'Дата обліку',
    'process_date'                => 'Дата опрацювання',
    'category'                    => 'Категорія',
    'tags'                        => 'Мітки',
    'deletePermanently'           => 'Видалити назавжди',
    'cancel'                      => 'Відміна',
    'targetdate'                  => 'Цільова дата',
    'startdate'                   => 'Дата початку',
    'tag'                         => 'Мітка',
    'under'                       => 'Під',
    'symbol'                      => 'Знак',
    'code'                        => 'Код',
    'iban'                        => 'IBAN',
    'account_number'              => 'Номер рахунку',
    'creditCardNumber'            => 'Номер кредитної картки',
    'has_headers'                 => 'Заголовки',
    'date_format'                 => 'Формат дати',
    'specifix'                    => 'Банк- або файл-специфічні податки',
    'attachments[]'               => 'Вкладення',
    'title'                       => 'Назва',
    'notes'                       => 'Примітки',
    'filename'                    => 'Ім\'я файлу',
    'mime'                        => 'Тип Mime',
    'size'                        => 'Розмір',
    'trigger'                     => 'Тригер',
    'stop_processing'             => 'Зупинити обробку',
    'start_date'                  => 'Початок діапазону',
    'end_date'                    => 'Кінець діапазону',
    'enddate'                     => 'End date',
    'start'                       => 'Початок діапазону',
    'end'                         => 'Кінець діапазону',
    'delete_account'              => 'Видалити акаунт ":name"',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => 'Видалити квитанцію ":name"',
    'delete_budget'               => 'Видалити бюджет ":name"',
    'delete_category'             => 'Видалити категорію ":name"',
    'delete_currency'             => 'Видалення валюти ":name"',
    'delete_journal'              => 'Видалити транзакцію з описом ":description"',
    'delete_attachment'           => 'Видалити вкладення ":name"',
    'delete_rule'                 => 'Видалити правило ":title"',
    'delete_rule_group'           => 'Видалити групу правил ":title"',
    'delete_link_type'            => 'Видалити тип посилання ":name"',
    'delete_user'                 => 'Видалити користувача ":email"',
    'delete_recurring'            => 'Видалити регулярні транзакцію ":title"',
    'user_areYouSure'             => 'Якщо ви видалите користувача ":email", усе зникне. Не існує операції відміни. Якщо видалите себе, ви втратите доступ до цього екземпяру Firefly III.',
    'attachment_areYouSure'       => 'Ви дійсно бажаєте видалити прикріплення з назвою ":name"?',
    'account_areYouSure'          => 'Ви впевнені, що хочете видалити обліковий запис з назвою ":name"?',
    'account_areYouSure_js'       => 'Are you sure you want to delete the account named "{name}"?',
    'bill_areYouSure'             => 'Ви впевнені, що хочете видалити квитанцію з назвою ":name"?',
    'rule_areYouSure'             => 'Ви дійсно бажаєте видалити правило ":title"?',
    'object_group_areYouSure'     => 'Ви дійсно бажаєте видалити групу з назвою ":title"?',
    'ruleGroup_areYouSure'        => 'Ви дійсно бажаєте видалити групу правил ":title"?',
    'budget_areYouSure'           => 'Ви впевнені, що хочете видалити бюджет ":name"?',
    'webhook_areYouSure'           => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'Ви впевнені, що хочете видалити категорію ":name"?',
    'recurring_areYouSure'        => 'Ви впевнені, що хочете видалити регулфрну трансакцію ":title"?',
    'currency_areYouSure'         => 'Ви впевнені, що хочете видалити валюту":name"?',
    'piggyBank_areYouSure'        => 'Ви впевнені, що хочете видалити скарбничку ":name"?',
    'journal_areYouSure'          => 'Ви впевнені, що хочете видалити транзакцію ":description"?',
    'mass_journal_are_you_sure'   => 'Видалити ці транзакції?',
    'tag_areYouSure'              => 'Ви дійсно хочете видалити мітку ":tag"?',
    'journal_link_areYouSure'     => 'Ви дійсно бажаєте видалити посилання між <a href=":source_link">:source</a> і <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Ви дійсно хочете видалити тип посилання ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Ви не зможете повернути видалені з Firefly III дані.',
    'mass_make_selection'         => 'Ви все ще можете запобігти видаленню елементів шляхом зняття чекбоксу.',
    'delete_all_permanently'      => 'Видалити обране назавжди',
    'update_all_journals'         => 'Оновити ці транзакції',
    'also_delete_transactions'    => 'Єдина транзакція, що пов\'язана з цим рахунком, буде видалена.|Усі :count транзакції, пов\'язані з цим рахунком, також будуть видалені.',
    'also_delete_transactions_js' => 'No transactions|The only transaction connected to this account will be deleted as well.|All {count} transactions connected to this account will be deleted as well.',
    'also_delete_connections'     => 'Єдина транзакція, пов\'язана з цим типом посилання, втратить це з\'єднання. | Всі :count транзакції, пов\'язані з цим типом посилання втратять з\'єднання.',
    'also_delete_rules'           => 'Єдине правило, що пов\'язане з цією групою правил, буде видалено.|Усі :count правила, пов\'язані з цією групою правил, також будуть видалені.',
    'also_delete_piggyBanks'      => 'Єдина скарбничка, що пов\'язана з цим рахунком, буде видалена.|Усі :count скарбнички, пов\'язані з цим рахунком, також будуть видалені.',
    'also_delete_piggyBanks_js'   => 'No piggy banks|The only piggy bank connected to this account will be deleted as well.|All {count} piggy banks connected to this account will be deleted as well.',
    'not_delete_piggy_banks'      => 'Скарбничка, що пов\'язана з цією групою не буде видалена.| Усі :count скарбнички, що пов\'язані з цією групою не будуть видалені.',
    'bill_keep_transactions'      => 'Єдина транзакція, що пов\'язана з цією квитанцією, не буде видалена.|Усі :count транзакції, пов\'язані з цією квитанцією, уникнуть видалення.',
    'budget_keep_transactions'    => 'Єдина транзакція, що пов\'язана з цим бюджетом, не буде видалена.|Усі :count транзакції, пов\'язані з цим бюджетом, також уникнуть видалення.',
    'category_keep_transactions'  => 'Єдина транзакція, що пов\'язана з цією категорією, не буде видалена.|Усі :count транзакції, пов\'язані з цією категорією, уникнуть видалення.',
    'recurring_keep_transactions' => 'Єдина транзакція, що пов\'язана з цією періодичною транзакцією, не буде видалена.|Усі :count транзакції, пов\'язані з цією періодичною транзакцією, уникнуть видалення.',
    'tag_keep_transactions'       => 'Єдина транзакція, що пов\'язана з цією міткою, не буде видалена.|Усі :count транзакцій, пов\'язані з цією міткою, уникнуть видалення.',
    'check_for_updates'           => 'Перевірити наявність оновлень',
    'liability_direction'         => 'Liability in/out',
    'delete_object_group'         => 'Видалити групу ":title"',
    'email'                       => 'Адреса електронної пошти',
    'password'                    => 'Пароль',
    'password_confirmation'       => 'Пароль (ще раз)',
    'blocked'                     => 'Заблоковано?',
    'blocked_code'                => 'Причина блокування',
    'login_name'                  => 'Логін',
    'is_owner'                    => 'Адміністратор?',
    'url'                         => 'URL',
    'bill_end_date'               => 'End date',

    // import
    'apply_rules'                 => 'Застосувати правила',
    'artist'                      => 'Виконавець',
    'album'                       => 'Альбом',
    'song'                        => 'Пісня',


    // admin
    'domain'                      => 'Домен',
    'single_user_mode'            => 'Відключити реєстрацію користувачів',
    'is_demo_site'                => 'Це демо-сайт',

    // import
    'configuration_file'          => 'Файл конфігурації',
    'csv_comma'                   => 'Кома (,)',
    'csv_semicolon'               => 'Крапка з комою (;)',
    'csv_tab'                     => 'Табуляція (невидима)',
    'csv_delimiter'               => 'Роздільник полів CSV',
    'client_id'                   => 'Ідентифікатор клієнта',
    'app_id'                      => 'ID додатку',
    'secret'                      => 'Таємний код',
    'public_key'                  => 'Публічний ключ',
    'country_code'                => 'Код країни',
    'provider_code'               => 'Банк або постачальник даних',
    'fints_url'                   => 'URL-адреса FinTS API',
    'fints_port'                  => 'Порт',
    'fints_bank_code'             => 'Код банку',
    'fints_username'              => 'Ім\'я користувача',
    'fints_password'              => 'PIN/Password',
    'fints_account'               => 'Обліковий запис FinTS',
    'local_account'               => 'Акаунт Firefly III',
    'from_date'                   => 'Дата від',
    'to_date'                     => 'Дата до',
    'due_date'                    => 'Дата закінчення',
    'payment_date'                => 'Дата оплати',
    'invoice_date'                => 'Дата рахунку',
    'internal_reference'          => 'Внутрішнє посилання',
    'inward'                      => 'Внутрішній опис',
    'outward'                     => 'Зовнішній опис',
    'rule_group_id'               => 'Група правил',
    'transaction_description'     => 'Опис транзакції',
    'first_date'                  => 'Перша дата',
    'transaction_type'            => 'Тип транзакції',
    'repeat_until'                => 'Повторювати до',
    'recurring_description'       => 'Опис регулярної транзакції',
    'repetition_type'             => 'Тип повторення',
    'foreign_currency_id'         => 'Іноземна валюта',
    'repetition_end'              => 'Повторення закінчується',
    'repetitions'                 => 'Повторення',
    'calendar'                    => 'Календар',
    'weekend'                     => 'Вихідні дні',
    'client_secret'               => 'Секретний ключ',
    'withdrawal_destination_id'   => 'Рахунок-одержувач',
    'deposit_source_id'           => 'Вихідний рахунок',
    'expected_on'                 => 'Очікується на',
    'paid'                        => 'Сплачено',
    'auto_budget_type'            => 'Автоматичний бюджет',
    'auto_budget_amount'          => 'Автобюджетна сума',
    'auto_budget_period'          => 'Автобюджетний період',
    'collected'                   => 'Зібрано',
    'submitted'                   => 'Надіслано',
    'key'                         => 'Ключ',
    'value'                       => 'Вміст запису',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
];