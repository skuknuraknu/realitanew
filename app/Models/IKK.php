<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IKK extends Model
{
    use HasFactory;
    // protected $table = 'Tb_IKK';
    protected $table = 'data_IKK';
    protected $fillable = 
    [
        'id'                        
        ,'kd_ss'                     
        ,'sasaran'                   
        ,'kd_ikk'                    
        ,'indikator_kinerja_kegiatan'
        ,'kd_program'                
        ,'program'                   
        ,'kd_keg'                    
        ,'rincian_kegiatan'          
    ];
}
