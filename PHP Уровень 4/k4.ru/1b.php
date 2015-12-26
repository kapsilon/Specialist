<?

/**
 * Шаблон проектирование Фабричный
 */

interface Shape
{
  function draw();
}
class Square implements Shape
{
  function draw()
  {
    echo __METHOD__;
  }
}
class Rectangle implements Shape
{
  function draw()
  {
    echo __METHOD__;
  }
}
class Circle implements Shape
{
  function draw()
  {
    echo __METHOD__;
  }
}

interface Color
{
  function fill();
}
class Red implements Color
{
  function fill()
  {
    echo __METHOD__;
  }
}
class Green implements Color
{
  function fill()
  {
    echo __METHOD__;
  }
}
class Blue implements Color
{
  function fill()
  {
    echo __METHOD__;
  }
}

/**
 *
 */

abstract class AbstractFactory
{
  abstract function getShape($type);
  abstract function getColor($name);
}

class ShapeFactory extends AbstractFactory
{
  function getShape($type)
  {
    $type = strtoupper($type);
    if(!$type) return null;
    switch ($type) {
      case 'SQUARE':
        return new Square;
        break;
      case 'RECT':
        return new Rectangle;
        break;
      case 'CIRCLE':
        return new Circle;
        break;
      default:
        throw new Exception("Wrong type!", 1);
        break;
    }
  }
  function getColor($colorName)
  {
    return null;
  }
}

class ColorFactory extends AbstractFactory
{
  function getColor($name)
  {
    $name = strtoupper($name);
    if(!$name) return null;
    switch ($name) {
      case 'RED':
        return new Red;
        break;
      case 'GREEN':
        return new Green;
        break;
      case 'BLUE':
        return new Blue;
        break;
      default:
        throw new Exception("Wrong name!", 1);
        break;
    }
  }
  function getShape($shapeType)
  {
    return null;
  }
}

/**
 *
 */
class FactoryProducer
{
  static function getFactory($factoryType)
  {
    if (!$factoryType) {
    return null;
    }
    switch (strtoupper($factoryType)) {
      case 'SHAPE':
        return new ShapeFactory();
        break;
      case 'COLOR':
        return new ColorFactory();
        break;

      default:
        throw new Exception('Wrong factory type!');
        break;
    }
  }
}

/*
$factory = new ShapeFactory;
$r = $factory->getShape('rect');
$c = $factory->getShape('circle');
$r->draw();
echo "<br>";
$c->draw();
*/
$shapeFactory = FactoryProducer::getFactory("SHAPE");
$c = $shapeFactory->getShape('circle');
$c->draw();

$colorFactory = FactoryProducer::getFactory("COLOR");
$r = $shapeFactory->getColor('red');
$r->fill();


/*****/
$btn = new AppleStyleButton();
$txt = new AppleStylyTextInput();

$widget = AppleFactory::create();
$btn = new AppleFactory->createButton();
$txt = new AppleFactory->TextInput();
