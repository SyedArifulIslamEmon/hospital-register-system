
<?php

class RegisterRecord extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'register_records';

    protected $fillable = array(
        'date',
        'start_time',
        'end_time',
        'status',
        'advice',
        'return_date',
        'doctor_id',
        'account_id'
    );

    public function doctor(){
        return $this->belongsTo( 'Doctor' );
    }

    public function register_account(){
        return $this->belongsTo( 'RegisterAccount', 'account_id', 'id' );
    }
}
