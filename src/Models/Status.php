<?php

namespace Brazidev\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'ticketit_statuses';

    protected $fillable = ['name', 'color'];

    /**
     * Indicates that this model should not be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get related tickets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('Brazidev\Ticketit\Models\Ticket', 'status_id');
    }
}
