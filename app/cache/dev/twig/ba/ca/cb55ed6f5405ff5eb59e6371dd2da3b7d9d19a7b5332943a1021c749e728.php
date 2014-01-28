<?php

/* SouthHillsOurFirstBundle:Default:dive.html.twig */
class __TwigTemplate_bacacb55ed6f5405ff5eb59e6371dd2da3b7d9d19a7b5332943a1021c749e728 extends Twig_Template
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
        echo " is diving!
";
    }

    public function getTemplateName()
    {
        return "SouthHillsOurFirstBundle:Default:dive.html.twig";
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
