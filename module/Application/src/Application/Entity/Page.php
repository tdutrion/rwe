<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page", indexes={@ORM\Index(name="fk_page_book1_idx", columns={"book_no"})})
 * @ORM\Entity
 */
class Page
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="page_no", type="integer", nullable=false)
     */
    private $pageNo;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=1000, nullable=false)
     */
    private $text;

    /**
     * @var \Application\Entity\Book
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Book", inversedBy="pages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book_no", referencedColumnName="book_no")
     * })
     */
    private $bookNo;


    /**
     * Set pageNo
     *
     * @param integer $pageNo
     * @return Page
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;

        return $this;
    }

    /**
     * Get pageNo
     *
     * @return integer 
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Page
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set bookNo
     *
     * @param \Application\Entity\Book $bookNo
     * @return Page
     */
    public function setBookNo(\Application\Entity\Book $bookNo)
    {
        $this->bookNo = $bookNo;

        return $this;
    }

    /**
     * Get bookNo
     *
     * @return \Application\Entity\Book 
     */
    public function getBookNo()
    {
        return $this->bookNo;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
}