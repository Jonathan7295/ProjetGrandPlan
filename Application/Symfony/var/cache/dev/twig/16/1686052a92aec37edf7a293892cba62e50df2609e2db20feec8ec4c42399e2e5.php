<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_5c71ee3176b067350d5a09561d519a2fa5f541280e5ea29de136ad49ee0fcc02 extends Twig_Template
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
        $__internal_36d3f87d95521ec0690a3e68c4e8aa176002cda34a2b1ec5ed9e5180d1554299 = $this->env->getExtension("native_profiler");
        $__internal_36d3f87d95521ec0690a3e68c4e8aa176002cda34a2b1ec5ed9e5180d1554299->enter($__internal_36d3f87d95521ec0690a3e68c4e8aa176002cda34a2b1ec5ed9e5180d1554299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_36d3f87d95521ec0690a3e68c4e8aa176002cda34a2b1ec5ed9e5180d1554299->leave($__internal_36d3f87d95521ec0690a3e68c4e8aa176002cda34a2b1ec5ed9e5180d1554299_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
