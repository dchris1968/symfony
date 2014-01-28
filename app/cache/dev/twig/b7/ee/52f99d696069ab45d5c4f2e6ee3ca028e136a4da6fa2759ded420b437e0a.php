<?php

/* SouthHillsOurFirstBundle:Default:testGlobalTemplate.html.twig */
class __TwigTemplate_b7ee52f99d696069ab45d5c4f2e6ee3ca028e136a4da6fa2759ded420b437e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "   These are Guidos favourite colours!
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "   Hello Doug!
   
";
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "   This is my very special footer!!
";
    }

    public function getTemplateName()
    {
        return "SouthHillsOurFirstBundle:Default:testGlobalTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  47 => 14,  41 => 10,  38 => 9,  33 => 5,  30 => 4,);
    }
}
