<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SPUserNoticeType
 *
 * 
 * XSD Type: SPUserNoticeType
 */
class SPUserNoticeType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\NoticeReferenceType $noticeRef
     */
    private $noticeRef = null;

    /**
     * @var string $explicitText
     */
    private $explicitText = null;

    /**
     * Gets as noticeRef
     *
     * @return \Greenter\Ubl\Entity\Etsi\NoticeReferenceType
     */
    public function getNoticeRef()
    {
        return $this->noticeRef;
    }

    /**
     * Sets a new noticeRef
     *
     * @param \Greenter\Ubl\Entity\Etsi\NoticeReferenceType $noticeRef
     * @return self
     */
    public function setNoticeRef(\Greenter\Ubl\Entity\Etsi\NoticeReferenceType $noticeRef)
    {
        $this->noticeRef = $noticeRef;
        return $this;
    }

    /**
     * Gets as explicitText
     *
     * @return string
     */
    public function getExplicitText()
    {
        return $this->explicitText;
    }

    /**
     * Sets a new explicitText
     *
     * @param string $explicitText
     * @return self
     */
    public function setExplicitText($explicitText)
    {
        $this->explicitText = $explicitText;
        return $this;
    }


}

