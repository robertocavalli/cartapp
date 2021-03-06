<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\StructuredValueContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Nutritional information about the recipe.
 *
 * @see http://schema.org/NutritionInformation
 *
 */
class NutritionInformation extends BaseType implements IntangibleContract, StructuredValueContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The number of calories.
     *
     * @param Energy|Energy[] $calories
     *
     * @return static
     *
     * @see http://schema.org/calories
     */
    public function calories($calories)
    {
        return $this->setProperty('calories', $calories);
    }

    /**
     * The number of grams of carbohydrates.
     *
     * @param Mass|Mass[] $carbohydrateContent
     *
     * @return static
     *
     * @see http://schema.org/carbohydrateContent
     */
    public function carbohydrateContent($carbohydrateContent)
    {
        return $this->setProperty('carbohydrateContent', $carbohydrateContent);
    }

    /**
     * The number of milligrams of cholesterol.
     *
     * @param Mass|Mass[] $cholesterolContent
     *
     * @return static
     *
     * @see http://schema.org/cholesterolContent
     */
    public function cholesterolContent($cholesterolContent)
    {
        return $this->setProperty('cholesterolContent', $cholesterolContent);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see http://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The number of grams of fat.
     *
     * @param Mass|Mass[] $fatContent
     *
     * @return static
     *
     * @see http://schema.org/fatContent
     */
    public function fatContent($fatContent)
    {
        return $this->setProperty('fatContent', $fatContent);
    }

    /**
     * The number of grams of fiber.
     *
     * @param Mass|Mass[] $fiberContent
     *
     * @return static
     *
     * @see http://schema.org/fiberContent
     */
    public function fiberContent($fiberContent)
    {
        return $this->setProperty('fiberContent', $fiberContent);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param PropertyValue|PropertyValue[]|string|string[] $identifier
     *
     * @return static
     *
     * @see http://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param ImageObject|ImageObject[]|string|string[] $image
     *
     * @return static
     *
     * @see http://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see http://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param Action|Action[] $potentialAction
     *
     * @return static
     *
     * @see http://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The number of grams of protein.
     *
     * @param Mass|Mass[] $proteinContent
     *
     * @return static
     *
     * @see http://schema.org/proteinContent
     */
    public function proteinContent($proteinContent)
    {
        return $this->setProperty('proteinContent', $proteinContent);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * The number of grams of saturated fat.
     *
     * @param Mass|Mass[] $saturatedFatContent
     *
     * @return static
     *
     * @see http://schema.org/saturatedFatContent
     */
    public function saturatedFatContent($saturatedFatContent)
    {
        return $this->setProperty('saturatedFatContent', $saturatedFatContent);
    }

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @param string|string[] $servingSize
     *
     * @return static
     *
     * @see http://schema.org/servingSize
     */
    public function servingSize($servingSize)
    {
        return $this->setProperty('servingSize', $servingSize);
    }

    /**
     * The number of milligrams of sodium.
     *
     * @param Mass|Mass[] $sodiumContent
     *
     * @return static
     *
     * @see http://schema.org/sodiumContent
     */
    public function sodiumContent($sodiumContent)
    {
        return $this->setProperty('sodiumContent', $sodiumContent);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param CreativeWork|CreativeWork[]|Event|Event[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * The number of grams of sugar.
     *
     * @param Mass|Mass[] $sugarContent
     *
     * @return static
     *
     * @see http://schema.org/sugarContent
     */
    public function sugarContent($sugarContent)
    {
        return $this->setProperty('sugarContent', $sugarContent);
    }

    /**
     * The number of grams of trans fat.
     *
     * @param Mass|Mass[] $transFatContent
     *
     * @return static
     *
     * @see http://schema.org/transFatContent
     */
    public function transFatContent($transFatContent)
    {
        return $this->setProperty('transFatContent', $transFatContent);
    }

    /**
     * The number of grams of unsaturated fat.
     *
     * @param Mass|Mass[] $unsaturatedFatContent
     *
     * @return static
     *
     * @see http://schema.org/unsaturatedFatContent
     */
    public function unsaturatedFatContent($unsaturatedFatContent)
    {
        return $this->setProperty('unsaturatedFatContent', $unsaturatedFatContent);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see http://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

}
