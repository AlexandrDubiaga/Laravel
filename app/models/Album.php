<?php
class Album extends Eloquent
{
  protected $table = 'Album';
  protected $primaryKey = 'AlbumId';
   public function track()
    {
        return $this->hasMany('Track','AlbumId','AlbumId');
    }
  
}
?>
