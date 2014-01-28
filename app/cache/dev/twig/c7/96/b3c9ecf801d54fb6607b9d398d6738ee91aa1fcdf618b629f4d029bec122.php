<?php

/* SouthHillsOurFirstBundle:Default:jump.html.twig */
class __TwigTemplate_c796b3c9ecf801d54fb6607b9d398d6738ee91aa1fcdf618b629f4d029bec122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " is jumping up and down!!
";
    }

    public function getTemplateName()
    {
        return "SouthHillsOurFirstBundle:Default:jump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
