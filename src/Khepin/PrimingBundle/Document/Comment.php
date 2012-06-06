<?php

namespace Khepin\PrimingBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Comment
{
    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\String
     */
    private $content;

    /**
     * @ODM\ReferenceOne(targetDocument="BlogPost", inversedBy="comments")
     */
    private $blog_post;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set blog_post
     *
     * @param Khepin\PrimingBundle\Document\BlogPost $blogPost
     */
    public function setBlogPost(\Khepin\PrimingBundle\Document\BlogPost $blogPost)
    {
        $this->blog_post = $blogPost;
    }

    /**
     * Get blog_post
     *
     * @return Khepin\PrimingBundle\Document\BlogPost $blogPost
     */
    public function getBlogPost()
    {
        return $this->blog_post;
    }
}
