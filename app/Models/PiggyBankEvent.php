<?php

/**
 * PiggyBankEvent.php
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

namespace FireflyIII\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

/**
 * FireflyIII\Models\PiggyBankEvent
 *
 * @property int|string                          $id
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property int|string                         $piggy_bank_id
 * @property int|null                     $transaction_journal_id
 * @property Carbon                       $date
 * @property string                       $amount
 * @property PiggyBank                    $piggyBank
 * @property-read TransactionJournal|null $transactionJournal
 * @method static Builder|PiggyBankEvent newModelQuery()
 * @method static Builder|PiggyBankEvent newQuery()
 * @method static Builder|PiggyBankEvent query()
 * @method static Builder|PiggyBankEvent whereAmount($value)
 * @method static Builder|PiggyBankEvent whereCreatedAt($value)
 * @method static Builder|PiggyBankEvent whereDate($value)
 * @method static Builder|PiggyBankEvent whereId($value)
 * @method static Builder|PiggyBankEvent wherePiggyBankId($value)
 * @method static Builder|PiggyBankEvent whereTransactionJournalId($value)
 * @method static Builder|PiggyBankEvent whereUpdatedAt($value)
 * @mixin Eloquent
 */
class PiggyBankEvent extends Model
{

    protected $casts
        = [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'date'       => 'date',
        ];

    protected $fillable = ['piggy_bank_id', 'transaction_journal_id', 'date', 'amount'];

    protected $hidden = ['amount_encrypted'];

    /**
     * @return BelongsTo
     */
    public function piggyBank(): BelongsTo
    {
        return $this->belongsTo(PiggyBank::class);
    }

    /**
     *
     * @param mixed $value
     */
    public function setAmountAttribute($value): void
    {
        $this->attributes['amount'] = (string)$value;
    }

    /**
     * @return BelongsTo
     */
    public function transactionJournal(): BelongsTo
    {
        return $this->belongsTo(TransactionJournal::class);
    }

    /**
     * Get the amount
     *
     * @return Attribute
     */
    protected function amount(): Attribute
    {
        return Attribute::make(
            get: static fn ($value) => (string)$value,
        );
    }
}
