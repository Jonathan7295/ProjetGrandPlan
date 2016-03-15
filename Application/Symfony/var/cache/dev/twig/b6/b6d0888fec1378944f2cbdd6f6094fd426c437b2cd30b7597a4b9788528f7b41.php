<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9115252356319994d893f4e2d2015f714d4e4179f13347813f6a886be4ed5919 extends Twig_Template
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
        $__internal_0e679e2f5b97235744b0d49caecd566cb8a8f0f194cf951362bdc97279470a99 = $this->env->getExtension("native_profiler");
        $__internal_0e679e2f5b97235744b0d49caecd566cb8a8f0f194cf951362bdc97279470a99->enter($__internal_0e679e2f5b97235744b0d49caecd566cb8a8f0f194cf951362bdc97279470a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0e679e2f5b97235744b0d49caecd566cb8a8f0f194cf951362bdc97279470a99->leave($__internal_0e679e2f5b97235744b0d49caecd566cb8a8f0f194cf951362bdc97279470a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
