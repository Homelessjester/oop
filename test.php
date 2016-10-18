<?php
abstract class AbstractClass
{
    abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass
{
    public function prefixName($name, $separator = ".")
    {
        if ($name == 'Pacman') {
            $prefix = 'Mr';
        } elseif ($name == 'Pacwoman') {
            $prefix = 'Mrs';
        } else {
            $prefix = '';
        }
        return $prefix . $separator . ' '. $name;
    }
}

$class = new ConcreteClass();
echo $class->prefixName('Pacman') . '<br>';
echo $class->prefixName('Pacwoman') . '<br>';