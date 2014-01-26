<?php
class Credit extends Eloquent {

	/**
	 * The database table used
	 *
	 * @var string
	 */
	protected $table = 'credits';

	/**
	 * @todo document this...
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
}