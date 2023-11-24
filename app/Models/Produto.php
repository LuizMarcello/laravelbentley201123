<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    /* Usando "SoftDeletes", quando o item for excluído, ele não será 
       removido do banco de dados. Na coluna "deleted_at", terá a
       data da exclusão. mas será mantido ainda no bd. */
    //use SoftDeletes;
    use HasFactory;

    /* O "model" sempre está em contato com o banco de dados. */
    /* Por questão de segurança, o "fillable" é para dizer quais são
       os únicos campos que serão aceitos pelo model. O usuário poderia
       tentar inspecionar e injetar algum campo a mais, lá no front. */

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'produtos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'nome', 'valor','banda', 'datanota', 'marca', 'modelo', 'notafiscal',
        'diametro', 'situacao', 'observacao','metros', 'tipodecabo','voltagem',
        'serial','macaddress','tipodeproduto'
    ];

    public function getProdutosPesquisarIndex(string $search = '')
    {
        /* Como já estamos dentro do model "Produto", este "$this" por
           si só, já representa este model. */
        $produto = $this->where(function ($query) use ($search) {
            /* Condicional, se "$search" existir, não for uma string
               vazia, daí faz a consulta ao banco de dados. */
            if ($search) {
                $query->where('nome', $search);
                /* O "like" quer dizer, parece com... */
                $query->orWhere('nome', 'LIKE', "%{$search}%");
            }
        })->get();

        return $produto;
    }

}