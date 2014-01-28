<?php

/* SouthHillsOurSecondBundle:Default:passArray.html.twig */
class __TwigTemplate_d5a7743177896559715d9c7803a8a5dd2f07d61fb155ce94c099ed0c137222a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theArray"]) ? $context["theArray"] : $this->getContext($context, "theArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 6
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "SouthHillsOurSecondBundle:Default:passArray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
