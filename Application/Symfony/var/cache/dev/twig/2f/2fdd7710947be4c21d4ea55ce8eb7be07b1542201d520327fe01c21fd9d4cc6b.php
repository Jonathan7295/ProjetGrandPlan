<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_05d9e17b0141d3e10e138c59be96f80c4f33d974cf8d492bd01dc6351b2b55ce extends Twig_Template
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
        $__internal_1df7a5837a6902bd35574f9d3feae7c0259137acbe0f2f996ddb0f6c16846b5b = $this->env->getExtension("native_profiler");
        $__internal_1df7a5837a6902bd35574f9d3feae7c0259137acbe0f2f996ddb0f6c16846b5b->enter($__internal_1df7a5837a6902bd35574f9d3feae7c0259137acbe0f2f996ddb0f6c16846b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1df7a5837a6902bd35574f9d3feae7c0259137acbe0f2f996ddb0f6c16846b5b->leave($__internal_1df7a5837a6902bd35574f9d3feae7c0259137acbe0f2f996ddb0f6c16846b5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
