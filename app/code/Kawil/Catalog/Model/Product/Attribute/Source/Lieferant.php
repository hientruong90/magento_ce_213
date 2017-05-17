<?php
namespace Kawil\Catalog\Model\Product\Attribute\Source;

class Lieferant extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
     /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['label' => __('AAAA'), 'value' => '1'],
                ['label' => __('BBBB'), 'value' => '2'],
                ['label' => __('CCCC'), 'value' => '3'],
                ['label' => __('DDDD'), 'value' => '4'],
                ['label' => __('EEEE'), 'value' => '5'],
            ];
        }
        return $this->_options;
    }

    public function getArrayOption(){
        return [
            '1' => 'AAAA',
            '2' => 'BBBB',
            '3' => 'CCCC',
            '4' => 'DDDD',
            '5' => 'EEEE',
        ];
    }

    /**
     * Get label of option (s)
     *
     * @param $value
     * @return mixed|null
     */
    public function getLabelOfOption($value){
        if(is_null($value)){
            return null;
        }
        $options = self::getArrayOption();
        $values = explode(',',$value);
        $result = array_intersect_key($options, array_flip($values));
        if(is_array($result)){
            return implode(', ',$result);
        }
        return null;
    }

}