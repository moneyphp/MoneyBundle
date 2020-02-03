<?php

declare(strict_types=1);

namespace Money\MoneyBundle\Form\Type;

use Money\Currencies;
use Money\Currency;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\Loader\CallbackChoiceLoader;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CurrencyMoneyPHPType extends AbstractType
{
    /**
     * @var Currencies
     */
    private $currencies;

    /**
     * @param Currencies $currencies
     */
    public function __construct(Currencies $currencies)
    {
        $this->currencies = $currencies;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults([
                'choice_loader' => new CallbackChoiceLoader(function () {
                    $currencies = array_map(
                        static function (Currency $currency) {
                            return $currency->getCode();
                        }, iterator_to_array($this->currencies)
                    );

                    ksort($currencies);

                    return array_combine($currencies, $currencies);
                }),
                'choice_translation_domain' => false,
            ])
        ;
    }
}
