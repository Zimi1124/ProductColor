<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Standard Edition </h1>
<h2 align="center"> Product Color Extension  </h2>

About
-----

This is simple Product Type extension in Sylius with behat testing environment, allowing user to add colors to products in 
admin panel.



Documentation
-------------

Documentation about Sylius installation and how to use it is available at [docs.sylius.com](http://docs.sylius.com).

Internals
------------
Colors are added by Extending BaseProduct and ProductType classes provided by Sylius Standard.

How to use 
---------------

To add new colors first add new const representing color to ProductInterface in src/Entity directory 

```bash
interface ProductInterface
{
    public const COLOR_RED = 'Red';

    public const COLOR_BLUE = 'Blue';

    public const COLOR_GREEN = 'Green';
    
    public const COLOR_NEW ='NewColor'
    
    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
```
Next we need to apply it to ProductTypeExtension localized in src/Form/Type 

```bash
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => [
                    'Undefined' => null,
                    'Red' => ProductInterface::COLOR_RED,
                    'Blue' => ProductInterface::COLOR_BLUE,
                    'Green' => ProductInterface::COLOR_GREEN,
                    'NewColor' => ProductInterface::COLOR_NEW
                ],
            ])
        ;
    }
```

then clear cache for good measure, and you're good to go.

Testing
------------

All test files are in test directory.

Bug Tracking
------------

If you want to report a bug or suggest an idea,  [please contact me](https://github.com/Zimi1124).

MIT License
-----------

Sylius is completely free and released under the [MIT License](https://github.com/Sylius/Sylius/blob/master/LICENSE).

Authors
-------
This Product Color Extension was created by [Szymon Stefaniak]((https://github.com/Zimi1124))


Sylius was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com). See the list
of [contributors from our awesome community](https://github.com/Sylius/Sylius/contributors).
