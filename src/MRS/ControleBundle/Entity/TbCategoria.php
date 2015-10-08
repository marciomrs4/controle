<?php

namespace MRS\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCategoria
 *
 * @ORM\Table(name="tb_categoria")
 * @ORM\Entity
 */
class TbCategoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="cat_descricao", type="string", length=45, nullable=false)
     */
    private $catDescricao;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_ativo", type="string", length=1, nullable=false)
     */
    private $catAtivo = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catCodigo;



    /**
     * Set catDescricao
     *
     * @param string $catDescricao
     *
     * @return TbCategoria
     */
    public function setCatDescricao($catDescricao)
    {
        $this->catDescricao = $catDescricao;

        return $this;
    }

    /**
     * Get catDescricao
     *
     * @return string
     */
    public function getCatDescricao()
    {
        return $this->catDescricao;
    }

    /**
     * Set catAtivo
     *
     * @param string $catAtivo
     *
     * @return TbCategoria
     */
    public function setCatAtivo($catAtivo)
    {
        $this->catAtivo = $catAtivo;

        return $this;
    }

    /**
     * Get catAtivo
     *
     * @return string
     */
    public function getCatAtivo()
    {
        return $this->catAtivo;
    }

    /**
     * Get catCodigo
     *
     * @return integer
     */
    public function getCatCodigo()
    {
        return $this->catCodigo;
    }

    public function getId()
    {
        return $this->catCodigo;
    }

    public function __toString()
    {
        return $this->getCatDescricao();
    }
}
