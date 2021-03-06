<?php
use App\Post;
use App\User;
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Presenters\DatePresenter;

class Comment extends Model
{
    //
    //public function post(){
    	//$this.belongsTo->
    //}

    use DatePresenter;
 
  // fields can be filled
  protected $fillable = ['content', 'user_id', 'post_id'];

    public function post(){
    	return $this->belongsTo('\App\Post');
    }

    public function user(){
    	//return $this->belongsTo('\App\User', 'comment_user')->withPivot('user_id')->withTimestamps();
        //return $this->belongsTo('\App\User', 'comment_user')->withTimestamps();
        //return $this->belongsToMany('\App\User', 'comment_user')->withTimestamps();
        return $this->belongsTo('\App\User');
    }
}
