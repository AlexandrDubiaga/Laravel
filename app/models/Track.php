<?php
class Track extends Eloquent
{
  protected $table = 'Track';
  protected $primaryKey = 'TrackId';
   protected function genre()
    {
        return $this->hasOne('Genre');
    }
  
}



?>
