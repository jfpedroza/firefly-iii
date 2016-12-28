<?php
/**
 * form.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [

    // new user:
    'bank_name'                      => '銀行名稱',
    'bank_balance'                   => '餘額',
    'savings_balance'                => '儲蓄帳戶的餘額',
    'credit_card_limit'              => '信用卡額度',
    'automatch'                      => '自動匹配',
    'skip'                           => '略過',
    'name'                           => '名稱',
    'active'                         => '啟用',
    'amount_min'                     => '最小金額',
    'amount_max'                     => '最大值',
    'match'                          => '匹配於',
    'repeat_freq'                    => '循環週期',
    'journal_currency_id'            => '貨幣',
    'currency_id'                    => 'Currency',
    'attachments'                    => 'Attachments',
    'journal_amount'                 => '金額',
    'journal_asset_source_account'   => '資產帳戶 （源頭）',
    'journal_source_account_name'    => '收入帳戶 （源頭）',
    'journal_source_account_id'      => '資產帳戶 （源頭）',
    'BIC'                            => 'BIC',
    'account_from_id'                => '從帳戶',
    'account_to_id'                  => '到帳戶',
    'source_account'                 => '來源帳戶',
    'destination_account'            => '目標帳戶',
    'journal_destination_account_id' => '資產帳戶 （目標）',
    'asset_destination_account'      => '資產帳戶 （目標）',
    'asset_source_account'           => '資產帳戶 （來源）',
    'journal_description'            => '描述',
    'note'                           => '備註',
    'split_journal'                  => '分割此交易',
    'split_journal_explanation'      => '分割這個交易為幾個部分',
    'currency'                       => '貨幣',
    'account_id'                     => '資產帳戶',
    'budget_id'                      => '預算',
    'openingBalance'                 => '開戶金額',
    'tagMode'                        => '標記模式',
    'tagPosition'                    => '標籤位置',
    'virtualBalance'                 => '虛擬金額',
    'longitude_latitude'             => '位置',
    'targetamount'                   => '目標金額',
    'accountRole'                    => '帳戶角色',
    'openingBalanceDate'             => '開戶日期',
    'ccType'                         => '信用卡付款計畫',
    'ccMonthlyPaymentDate'           => '信用卡每月付款日期',
    'piggy_bank_id'                  => '存錢筒',
    'returnHere'                     => '回到這裡',
    'returnHereExplanation'          => '儲存後，回到這裡創建另一個記錄。',
    'returnHereUpdateExplanation'    => '更新後，回到這裡。',
    'description'                    => '描述',
    'expense_account'                => '支出帳戶',
    'revenue_account'                => '收入帳戶',

    'revenue_account_source'      => '收入帳戶 （源頭）',
    'source_account_asset'        => '來源帳戶 （資產帳戶）',
    'destination_account_expense' => 'Destination account (expense account)',
    'destination_account_asset'   => 'Destination account (asset account)',
    'source_account_revenue'      => '來源帳戶 （收入帳戶）',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Convert withdrawal',
    'convert_Deposit'             => 'Convert deposit',
    'convert_Transfer'            => 'Convert transfer',


    'amount'                     => '金額',
    'date'                       => '日期',
    'interest_date'              => '付息日',
    'book_date'                  => 'Book date',
    'process_date'               => '處理日期',
    'category'                   => '類別',
    'tags'                       => '標籤',
    'deletePermanently'          => '永久刪除',
    'cancel'                     => '取消',
    'targetdate'                 => '儲蓄目標日期',
    'tag'                        => '標籤',
    'under'                      => '低於',
    'symbol'                     => 'Symbol',
    'code'                       => 'Code',
    'iban'                       => 'IBAN',
    'accountNumber'              => '帳戶號碼',
    'has_headers'                => '標頭',
    'date_format'                => '日期格式',
    'specifix'                   => 'Bank- or file specific fixes',
    'attachments[]'              => '附檔',
    'store_new_withdrawal'       => '存儲新提款',
    'store_new_deposit'          => '存儲新存款',
    'store_new_transfer'         => '存儲新轉帳',
    'add_new_withdrawal'         => '新增提款',
    'add_new_deposit'            => '新增新存款',
    'add_new_transfer'           => 'Add a new transfer',
    'noPiggybank'                => '(no piggy bank)',
    'title'                      => '標題',
    'notes'                      => '備註',
    'filename'                   => '檔案名稱',
    'mime'                       => 'Mime type',
    'size'                       => 'Size',
    'trigger'                    => 'Trigger',
    'stop_processing'            => 'Stop processing',
    'start_date'                 => 'Start of range',
    'end_date'                   => 'End of range',
    'export_start_range'         => 'Start of export range',
    'export_end_range'           => 'End of export range',
    'export_format'              => '檔案格式',
    'include_attachments'        => '包括上傳的附件',
    'include_old_uploads'        => '包含導入的資料',
    'accounts'                   => '從這些帳戶匯出交易記錄',
    'delete_account'             => '刪除帳號 ":name"',
    'delete_bill'                => '刪除帳單 ":name"',
    'delete_budget'              => '刪除預算 ":name"',
    'delete_category'            => '刪除類別 ":name"',
    'delete_currency'            => '刪除貨幣 ":name"',
    'delete_journal'             => '刪除包含描述 ":description" 的交易',
    'delete_attachment'          => 'Delete attachment ":name"',
    'delete_rule'                => 'Delete rule ":title"',
    'delete_rule_group'          => 'Delete rule group ":title"',
    'attachment_areYouSure'      => 'Are you sure you want to delete the attachment named ":name"?',
    'account_areYouSure'         => 'Are you sure you want to delete the account named ":name"?',
    'bill_areYouSure'            => '你確定要刪除賬單 ":name" 嗎？',
    'rule_areYouSure'            => 'Are you sure you want to delete the rule titled ":title"?',
    'ruleGroup_areYouSure'       => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'          => 'Are you sure you want to delete the budget named ":name"?',
    'category_areYouSure'        => 'Are you sure you want to delete the category named ":name"?',
    'currency_areYouSure'        => 'Are you sure you want to delete the currency named ":name"?',
    'piggyBank_areYouSure'       => 'Are you sure you want to delete the piggy bank named ":name"?',
    'journal_areYouSure'         => '你真的要刪除這個描述為 ":description" 的交易嗎？',
    'mass_journal_are_you_sure'  => 'Are you sure you want to delete these transactions?',
    'tag_areYouSure'             => '你真的要要刪除標籤 ":tag" 嗎？',
    'permDeleteWarning'          => 'Deleting stuff from Firely is permanent and cannot be undone.',
    'mass_make_selection'        => 'You can still prevent items from being deleted by removing the checkbox.',
    'delete_all_permanently'     => 'Delete selected permanently',
    'update_all_journals'        => 'Update these transactions',
    'also_delete_transactions'   => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_rules'          => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'     => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'bill_keep_transactions'     => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will spared deletion.',
    'budget_keep_transactions'   => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will spared deletion.',
    'category_keep_transactions' => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will spared deletion.',
    'tag_keep_transactions'      => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will spared deletion.',

    'email'                   => 'Email address',
    'password'                => 'Password',
    'password_confirmation'   => 'Password (again)',
    'blocked'                 => 'Is blocked?',
    'blocked_code'            => 'Reason for block',


    // admin
    'domain'                  => 'Domain',
    'single_user_mode'        => 'Single user mode',
    'must_confirm_account'    => 'New users must activate account',
    'is_demo_site'            => 'Is demo site',


    // import
    'import_file'             => '匯入檔案',
    'configuration_file'      => 'Configuration file',
    'import_file_type'        => '匯入檔案類型',
    'csv_comma'               => 'A comma (,)',
    'csv_semicolon'           => 'A semicolon (;)',
    'csv_tab'                 => 'A tab (invisible)',
    'csv_delimiter'           => 'CSV field delimiter',
    'csv_import_account'      => 'Default import account',
    'csv_config'              => 'CSV import configuration',


    'due_date'           => '到期日',
    'payment_date'       => 'Payment date',
    'invoice_date'       => 'Invoice date',
    'internal_reference' => 'Internal reference',
];