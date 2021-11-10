<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Calculator operation model.
 *
 *  @package App
 */

class Calculator extends Model
{
    use HasFactory;
    /**
     * Sum the given numbers and return the result.
     *
     * @param  int $a
     * @param  int $b
     * @param  int $b
     * @return int
     */
    public function CW(int $a, int $b, int $c): int
    {
        
         return ceil(((($a + $b + $c)/3)*30)/150) ;
    }

     public function MAVG(int $a, int $b, int $c): int
    {
        
         return ceil((($a + $b + $c)/3)*30) ;
    }

  public function AVG(int $a, int $b, int $c): int
    {
        
         return ceil(($a + $b + $c)/3) ;
    }

  public function calculateCW( int $a, int $b, int$c): ?int
{
    
            return $this->CW($a, $b, $c);
}

  public function calculateAVG(int $operation, int $a, int $b, int$c)): ?int
{
    
            return $this->AVG($a, $b, $c);
}

}
