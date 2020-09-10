<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ClauseType
 *
 * ABIE
 *  Clause. Details
 *  A class to define a clause (a distinct article or provision) in a contract, treaty, will, or other formal or legal written document requiring compliance.
 *  Clause
 * XSD Type: ClauseType
 */
class ClauseType
{

    /**
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Content[] $content
     */
    private $content = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ID $iD
     * @return self
     */
    public function setID(\Greenter\Ubl\Entity\CommonBasic\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Content $content
     */
    public function addToContent(\Greenter\Ubl\Entity\CommonBasic\Content $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Content[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }


}

