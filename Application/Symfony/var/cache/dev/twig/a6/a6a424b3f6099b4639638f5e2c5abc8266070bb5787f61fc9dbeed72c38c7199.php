<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6c1b1933ebc887d319af6dbda0384c23ac51a7ad2a9c30669dbd4c4d58be9611 extends Twig_Template
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
        $__internal_3f33966c43ae12f2deebca412c12d569c555c67cbf793f333a2b4b2f5428f887 = $this->env->getExtension("native_profiler");
        $__internal_3f33966c43ae12f2deebca412c12d569c555c67cbf793f333a2b4b2f5428f887->enter($__internal_3f33966c43ae12f2deebca412c12d569c555c67cbf793f333a2b4b2f5428f887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3f33966c43ae12f2deebca412c12d569c555c67cbf793f333a2b4b2f5428f887->leave($__internal_3f33966c43ae12f2deebca412c12d569c555c67cbf793f333a2b4b2f5428f887_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
