<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestamo extends Model
{
	use HasFactory;
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'prestamos';

    protected $fillable = ['Fecha_prestamo','CantidadPrestada','libros_id','elementos_id','usuario_id','prestador_id','Estado_Prestamo'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devolucions()
    {
        return $this->hasMany('App\Models\Devolucion', 'prestamos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function elemento()
    {
        return $this->hasOne('App\Models\Elemento', 'id', 'elementos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libros_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

    public function prestador()
    {
        return $this->hasOne('App\Models\User', 'id', 'prestador_id');
    }
    
}
