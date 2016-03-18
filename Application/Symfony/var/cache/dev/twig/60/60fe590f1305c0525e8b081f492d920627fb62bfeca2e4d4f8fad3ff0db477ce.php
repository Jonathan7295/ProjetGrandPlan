<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_bfec32202f54158f1c3edf8b39fce6d92aa1eed1c2f23c670f14f7a04b185aad extends Twig_Template
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
        $__internal_97aa0096518874977c7069cac2d1bbd93a5a1c3502bd5b7aa3b4e8db0354ddf5 = $this->env->getExtension("native_profiler");
        $__internal_97aa0096518874977c7069cac2d1bbd93a5a1c3502bd5b7aa3b4e8db0354ddf5->enter($__internal_97aa0096518874977c7069cac2d1bbd93a5a1c3502bd5b7aa3b4e8db0354ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_97aa0096518874977c7069cac2d1bbd93a5a1c3502bd5b7aa3b4e8db0354ddf5->leave($__internal_97aa0096518874977c7069cac2d1bbd93a5a1c3502bd5b7aa3b4e8db0354ddf5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
