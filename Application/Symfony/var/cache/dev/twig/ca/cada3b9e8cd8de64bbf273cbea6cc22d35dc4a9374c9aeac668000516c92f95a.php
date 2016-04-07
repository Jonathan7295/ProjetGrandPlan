<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d95936679f91b4edda090ed584d54ff0dd902975cebedf23e691ec830907f40b extends Twig_Template
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
        $__internal_5bde34d10d5b58474e00bf982309cbc214c09f3f9dcfbf3845c8de9a0857cd07 = $this->env->getExtension("native_profiler");
        $__internal_5bde34d10d5b58474e00bf982309cbc214c09f3f9dcfbf3845c8de9a0857cd07->enter($__internal_5bde34d10d5b58474e00bf982309cbc214c09f3f9dcfbf3845c8de9a0857cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5bde34d10d5b58474e00bf982309cbc214c09f3f9dcfbf3845c8de9a0857cd07->leave($__internal_5bde34d10d5b58474e00bf982309cbc214c09f3f9dcfbf3845c8de9a0857cd07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
