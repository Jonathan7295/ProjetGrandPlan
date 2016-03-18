<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b6c8d57ef0d4cdcbe3fd4f39d38aae1541bb42b4f81227626a6ef6dfcbc44ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1fa74f782475147a2dc180e5a7fdccca51de0e98c870000451250f96880e94c = $this->env->getExtension("native_profiler");
        $__internal_a1fa74f782475147a2dc180e5a7fdccca51de0e98c870000451250f96880e94c->enter($__internal_a1fa74f782475147a2dc180e5a7fdccca51de0e98c870000451250f96880e94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1fa74f782475147a2dc180e5a7fdccca51de0e98c870000451250f96880e94c->leave($__internal_a1fa74f782475147a2dc180e5a7fdccca51de0e98c870000451250f96880e94c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7295771d4e38bf11bd0f42e66d3135dbe7c5026e555eac5e457e010bb165b01 = $this->env->getExtension("native_profiler");
        $__internal_a7295771d4e38bf11bd0f42e66d3135dbe7c5026e555eac5e457e010bb165b01->enter($__internal_a7295771d4e38bf11bd0f42e66d3135dbe7c5026e555eac5e457e010bb165b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7295771d4e38bf11bd0f42e66d3135dbe7c5026e555eac5e457e010bb165b01->leave($__internal_a7295771d4e38bf11bd0f42e66d3135dbe7c5026e555eac5e457e010bb165b01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fafdd3d21c80914ac07ba7dcdffd70e3ee1624fcc2631c987be27541b76315e = $this->env->getExtension("native_profiler");
        $__internal_3fafdd3d21c80914ac07ba7dcdffd70e3ee1624fcc2631c987be27541b76315e->enter($__internal_3fafdd3d21c80914ac07ba7dcdffd70e3ee1624fcc2631c987be27541b76315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3fafdd3d21c80914ac07ba7dcdffd70e3ee1624fcc2631c987be27541b76315e->leave($__internal_3fafdd3d21c80914ac07ba7dcdffd70e3ee1624fcc2631c987be27541b76315e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cc929d4a7546f4f1b0bef1a041dd597d7ac475f4597176f6189c56b04eb8430 = $this->env->getExtension("native_profiler");
        $__internal_1cc929d4a7546f4f1b0bef1a041dd597d7ac475f4597176f6189c56b04eb8430->enter($__internal_1cc929d4a7546f4f1b0bef1a041dd597d7ac475f4597176f6189c56b04eb8430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1cc929d4a7546f4f1b0bef1a041dd597d7ac475f4597176f6189c56b04eb8430->leave($__internal_1cc929d4a7546f4f1b0bef1a041dd597d7ac475f4597176f6189c56b04eb8430_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
