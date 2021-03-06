<?xml version="1.0">
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Format">
    <xsl:template match="/">
        <html>
            <body>
                <h2>Registro de Cursos</h2>
                    <table border="1">
                            <tr bgcolor="#9acd32">
                            <th align="left">codigo</th>
                            <th align="left">disciplina</th>
                            <th align="left">descricao</th>
                            </tr>
                        <xsl:for-each select="controle_academico/curso">
                        <xsl:sort select="descricao"/>
                            <tr>
                                <td><xsl:value-of select="codigo"/></td>
                                <td><xsl:value-of select="disciplina"/></td>
                                <td><xsl:value-of select="descricao"/></td>
                            </tr>
                        </xsl:for-each>
                    </table>
            </body>
        </html>
    </xsl:template>
    </xsl:stylesheet>
</xsl:sylesheet>