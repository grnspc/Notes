<?php

namespace Grnspc\Notes\Traits;

use Grnspc\Notes\Note;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Trait     AuthoredNotes
 *
 *
 * @property  \Illuminate\Database\Eloquent\Collection  authoredNotes
 */
trait AuthoredNotes
{
    /* -----------------------------------------------------------------
     |  Relationships
     | -----------------------------------------------------------------
     */

    /**
     * Relation to Many notes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authoredNotes(): HasMany
    {
        return $this->hasMany(config('notes.model', Note::class), 'author_id');
    }
}
