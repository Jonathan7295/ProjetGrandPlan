<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ec63d856f65aa915e6c4dc2f540712312bb3fc26a968e4e0a263d87ea48539fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_132b58cd7b3b9027943c11c30469a8120d4d482906fc28efc6bf8d0ae93a22f1 = $this->env->getExtension("native_profiler");
        $__internal_132b58cd7b3b9027943c11c30469a8120d4d482906fc28efc6bf8d0ae93a22f1->enter($__internal_132b58cd7b3b9027943c11c30469a8120d4d482906fc28efc6bf8d0ae93a22f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "            ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 33
        echo "        </div>
    </body>
</html>
";
        
        $__internal_132b58cd7b3b9027943c11c30469a8120d4d482906fc28efc6bf8d0ae93a22f1->leave($__internal_132b58cd7b3b9027943c11c30469a8120d4d482906fc28efc6bf8d0ae93a22f1_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b04518eae3432082d63d93391dc425f512eea93046324c2e1fc7d5e25fb6007 = $this->env->getExtension("native_profiler");
        $__internal_1b04518eae3432082d63d93391dc425f512eea93046324c2e1fc7d5e25fb6007->enter($__internal_1b04518eae3432082d63d93391dc425f512eea93046324c2e1fc7d5e25fb6007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_1b04518eae3432082d63d93391dc425f512eea93046324c2e1fc7d5e25fb6007->leave($__internal_1b04518eae3432082d63d93391dc425f512eea93046324c2e1fc7d5e25fb6007_prof);

    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fb13d4f847917b81caf7d7f1cf4d051e6a1b319f79f2cb735212c44d51aaa0a4 = $this->env->getExtension("native_profiler");
        $__internal_fb13d4f847917b81caf7d7f1cf4d051e6a1b319f79f2cb735212c44d51aaa0a4->enter($__internal_fb13d4f847917b81caf7d7f1cf4d051e6a1b319f79f2cb735212c44d51aaa0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 32
        echo "            ";
        
        $__internal_fb13d4f847917b81caf7d7f1cf4d051e6a1b319f79f2cb735212c44d51aaa0a4->leave($__internal_fb13d4f847917b81caf7d7f1cf4d051e6a1b319f79f2cb735212c44d51aaa0a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  129 => 31,  122 => 30,  116 => 29,  106 => 33,  103 => 31,  101 => 29,  97 => 27,  94 => 26,  88 => 25,  79 => 22,  74 => 21,  69 => 20,  64 => 19,  62 => 18,  58 => 16,  50 => 14,  44 => 11,  40 => 10,  35 => 9,  33 => 8,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*             {% block javascript %}*/
/*             {% endblock javascript %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
