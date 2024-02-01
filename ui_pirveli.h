/********************************************************************************
** Form generated from reading UI file 'pirveli.ui'
**
** Created by: Qt User Interface Compiler version 6.6.1
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_PIRVELI_H
#define UI_PIRVELI_H

#include <QtCore/QVariant>
#include <QtWidgets/QApplication>
#include <QtWidgets/QDialog>
#include <QtWidgets/QHBoxLayout>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QSpacerItem>
#include <QtWidgets/QVBoxLayout>

QT_BEGIN_NAMESPACE

class Ui_pirveli
{
public:
    QHBoxLayout *horizontalLayout_2;
    QHBoxLayout *horizontalLayout;
    QSpacerItem *horizontalSpacer_2;
    QVBoxLayout *verticalLayout;
    QSpacerItem *verticalSpacer_2;
    QPushButton *pushButton;
    QSpacerItem *verticalSpacer;
    QPushButton *pushButton_2;
    QSpacerItem *verticalSpacer_3;
    QSpacerItem *horizontalSpacer;

    void setupUi(QDialog *pirveli)
    {
        if (pirveli->objectName().isEmpty())
            pirveli->setObjectName("pirveli");
        pirveli->resize(400, 300);
        horizontalLayout_2 = new QHBoxLayout(pirveli);
        horizontalLayout_2->setObjectName("horizontalLayout_2");
        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName("horizontalLayout");
        horizontalSpacer_2 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_2);

        verticalLayout = new QVBoxLayout();
        verticalLayout->setObjectName("verticalLayout");
        verticalSpacer_2 = new QSpacerItem(20, 40, QSizePolicy::Minimum, QSizePolicy::Expanding);

        verticalLayout->addItem(verticalSpacer_2);

        pushButton = new QPushButton(pirveli);
        pushButton->setObjectName("pushButton");

        verticalLayout->addWidget(pushButton);

        verticalSpacer = new QSpacerItem(20, 40, QSizePolicy::Minimum, QSizePolicy::Expanding);

        verticalLayout->addItem(verticalSpacer);

        pushButton_2 = new QPushButton(pirveli);
        pushButton_2->setObjectName("pushButton_2");

        verticalLayout->addWidget(pushButton_2);

        verticalSpacer_3 = new QSpacerItem(20, 40, QSizePolicy::Minimum, QSizePolicy::Expanding);

        verticalLayout->addItem(verticalSpacer_3);


        horizontalLayout->addLayout(verticalLayout);

        horizontalSpacer = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer);


        horizontalLayout_2->addLayout(horizontalLayout);


        retranslateUi(pirveli);

        QMetaObject::connectSlotsByName(pirveli);
    } // setupUi

    void retranslateUi(QDialog *pirveli)
    {
        pirveli->setWindowTitle(QCoreApplication::translate("pirveli", "Dialog", nullptr));
        pushButton->setText(QCoreApplication::translate("pirveli", "login", nullptr));
        pushButton_2->setText(QCoreApplication::translate("pirveli", "signup", nullptr));
    } // retranslateUi

};

namespace Ui {
    class pirveli: public Ui_pirveli {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_PIRVELI_H
