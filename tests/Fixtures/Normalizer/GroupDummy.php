<?php

declare(strict_types=1);

namespace AutoMapper\Tests\Fixtures\Normalizer;

use Symfony\Component\Serializer\Attribute\Groups;

class GroupDummy extends GroupDummyParent implements GroupDummyInterface
{
    #[Groups(['a'])]
    private $foo;
    #[Groups(['b', 'c', 'name_converter'])]
    protected $bar;
    #[ChildOfGroupsAnnotationDummy]
    protected $quux;
    private $fooBar;
    private $symfony;

    #[Groups(['b'])]
    public function setBar($bar)
    {
        $this->bar = $bar;
    }

    #[Groups(['c'])]
    public function getBar()
    {
        return $this->bar;
    }

    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

    public function getFoo()
    {
        return $this->foo;
    }

    public function setFooBar($fooBar)
    {
        $this->fooBar = $fooBar;
    }

    #[Groups(['a', 'b', 'name_converter'])]
    public function isFooBar()
    {
        return $this->fooBar;
    }

    public function setSymfony($symfony)
    {
        $this->symfony = $symfony;
    }

    public function getSymfony()
    {
        return $this->symfony;
    }

    public function getQuux()
    {
        return $this->quux;
    }

    public function setQuux($quux): void
    {
        $this->quux = $quux;
    }
}
